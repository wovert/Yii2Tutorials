# 什么是 Yii 框架
> 快速、安全、专业的 PHP 框架
- 最新版本是 2016年4月28日发布的2.0.8版本

# Yii 框架有什么用
> 适合开发 Web2.0 网站。博客、社区网站、SNS、分享服务、内容管理系统、电子商务网站、RESTFULL Web 服务这些应用，Yii框架都是不错的选择

# 为什么要用 Yii 框架
## 开发块
自带丰富的功能，包括 ActiveRecord、缓存、身份验证和 RBAC、脚手架、单元测试这些功能，可显著缩短开发时间

## 代码优雅
Yii 框架严格按照 MVC 设计模式组织代码，清晰分离逻辑层和表示层，代码严谨优雅，可维护性高

## 安全可靠
Yii 框架的措施包括了输入验证、输出过滤、SQL注入和跨站脚本攻击的预防等。


# 搭建开发环境
- WampServer(PHP 5.4.0+)

# 开发工具
- [eclipse for Developers](http://www.eclipse.org/downloads/packages/)

# 学习资料
- [官方地址](https://www.yiiframework.com)
- [Yii API](https://www.yiiframework.com/doc/api/2.0/)
- [开源项目地址](https://github.com/yiisoft/yii2)
- [《权威指南 The Definitive Guid to Yii 2.0》](http://www.yiichina.com/doc/guide/2.0)
- [《类参考手册 Yii PHP Framework Version 2》](http://www.yiichina.com/doc/api/2.0)

# Yii 应用
## 应用结构
- basic/ 应用根目录
	+ composer.json 描述包信息，Composer 配置
	+ config/ 控制台应用配置信息
		* console.php
		* web.php
	+ commands/ 控制台命令类
	+ controllers/ 控制器类
	+ models/ 模型类
	+ runtime/ 运行时生成的日志和缓存文件
	+ vendor/ 已经安装 Composer
	+ views/ 视图文件
	+ wweb/ Web应用根目录
		* assets/ 资源目录
		* index.php 入口文件
	+ yii 控制台命令执行脚本

## 升级 Yii2 最新版本
- 升级前准备
	+ 避免未知的 BUG 以及可以使用新功能
	+ 目前最新版本：2.0.10
	+ 查看升级日志和说明
		* 更新日志：https://github.com/yiisoft/yii2/blob/2.0.10/framework/CHANGELOG.md
		* 升级说明：https://github.com/yiisoft/yii2/blob/2.0.10/framework/UPGRADE.md

# Yii2.0 安装(Basic 应用模板)
## composer 安装
https://pkg.phpcomposer.com/#how-to-install-composer

## Apache 配置信息
- http.conf
<Directory "E:\lingyima\development\www\basic\web">  
    Options Indexes FollowSymLinks Includes ExecCGI  
    AllowOverride All  
    Require all granted  
</Directory>

- http-vhosts.conf
<VirtualHost *:80>
	DocumentRoot "E:\lingyima\development\www\basic\web"
	ServerName local.yii.com
	<Directory "E:\lingyima\development\www\basic\web">
		# 开启 mod_rewrite 用于美化 URL 功能的支持（译注：对应 pretty URL 选项）
		RewriteEngine on
		# 如果请求的是真实存在的文件或目录，直接访问
		RewriteCond %{REQUEST_FILENAME} !-f
		RewriteCond %{REQUEST_FILENAME} !-d
		# 如果请求的不是真实文件或目录，分发请求至 index.php
		RewriteRule . index.php

		# if $showScriptName is false in UrlManager, do not allow accessing URLs with script name
		RewriteRule ^index.php/ - [L,R=404]

	</Directory>
</VirtualHost>

