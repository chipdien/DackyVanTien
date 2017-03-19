echo 将下面的目录修改为本地的.net framework 安装路径
set path=%path%;%windir%\Microsoft.NET\Framework\v2.0.50727
regsvr32 /u NetLinkModule.dll

regsvr32 NetLinkModule.dll
