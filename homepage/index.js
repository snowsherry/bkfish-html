const fs = require('fs');
const path = require('path');
const deleteFolder=(path,isTop=true)=>{
    var files = [];
    if( fs.existsSync(path) ) {
        files = fs.readdirSync(path);
        files.forEach(function(file,index){
            var curPath = path + "/" + file;
            if(fs.statSync(curPath).isDirectory()) { // recurse
                deleteFolder(curPath,false);
            } else { // delete file
                fs.unlinkSync(curPath);
            }
        });
        if(!isTop)fs.rmdirSync(path);
    }
}
const copyFile = function (srcPath, tarPath,company, filter = []) {
    fs.readdir(srcPath, function (err, files) {
        /*console.log(files)*/
        deleteFolder(tarPath);
        if (err === null) {
            files.forEach(function (filename) {
                let filedir = path.join(srcPath,filename);
                let filterFlag = filter.some(item => item === filename)
                if (!filterFlag) {
                    fs.stat(filedir, function (errs, stats) {
                        let isFile = stats.isFile()
                        if (isFile) {                                    // 复制文件
                            const destPath = path.join(tarPath,filename);
                            fs.copyFile(filedir, destPath, (err) =>  {
                                if(filename.indexOf('.html')>0){
                                    var str = fs.readFileSync(destPath, {
                                        encoding: 'utf-8'
                                    });
                                    //逻辑验证
                                    let distStr=   str.replace(/{{@(.*?)}}/g,function(word,$1){
                                        return company[$1]||'';
                                    })
                                   /* console.log('distStr',distStr)*/
                                    fs.writeFile(destPath,distStr,'utf8',function(err){
                                        //如果err=null，表示文件使用成功，否则，表示希尔文件失败
                                        if(err)
                                            console.log('写文件出错了，错误是：'+err);
                                        else{

                                        }

                                    })
                                }
                            })
                            //如果是文件 读取文件
                        } else {                                        // 创建文件夹
                            let tarFiledir = path.join(tarPath,filename);
                            fs.mkdir(tarFiledir,(err) =>  { });
                            copyFile(filedir, tarFiledir, company,filter)                 // 递归
                        }
                    })
                }
            })
            console.log(`${company.name} done.....`);
        } else {
            if (err) console.error(err);
        }
    })
}
/*copyFile('./source','./dist')*/
let companyArray=[
    {name:"南京鲲鱼信息科技有限公司",age:"12"},
    {name:"南京小黑鱼旅行社有限公司"},
    {name:"金爵（杭州）信息科技有限公司"},
    {name:"大连溦风科技有限公司"},
    {name:"上海鳢链科技有限公司"},
    {name:"海南鳢链区块链科技有限公司"},
    {name:"千夫长（大连）网络科技有限公司"},
    {name:"上海小黑鱼国际旅行社有限公司"},
    {name:"广州弘宸融资租赁有限公司"},
    {name:"上海由趣信息技术有限公司"},
    {name:"上海趣悠信息技术有限公司"},
    {name:"上海恺方信息技术有限公司"},
    {name:"常州由之趣信息技术有限公司"},
    {name:"南京金貔犰商务咨询有限公司"},
    {name:"上海白鳟科技有限公司"},
    {name:"上海鲲鱼科技有限公司"},
];
for(let company of companyArray){
    let distDir=`./dist/${company.name}`;
    if(!fs.existsSync(distDir)){
        fs.mkdir(distDir,(err) =>  { });
    }
    copyFile('./source',distDir,company);
}


