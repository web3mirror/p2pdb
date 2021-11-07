

# P2PDB

[![standard-readme compliant](https://img.shields.io/badge/readme%20style-standard-brightgreen.svg?style=flat-square)](https://github.com/RichardLitt/standard-readme)

中文 | [English](./README-en.md)

简介
    P2PDB（p2p数据库），是一个去中心化、分布式、点对点数据库、P2PDB使用IPFS为其数据存储和IPFS Pubsub自动与对等方同步数据。P2PDB期望打造一个去中心化的分布式数据库，使P2PDB 成为去中心化应用程序 (dApps)、区块链应用程序和离线Web应用程序的绝佳选择, P2PDB基于[白皮书](./doc/zh-CH/%E7%99%BD%E7%9A%AE%E4%B9%A6.md)实现

P2PDB包含以下功能：

1. `count` 一个分布式计数器，用于验证项目可行性，使用CRDT协议，实现最终一致性（开发中）

2. `kv`   一个key=>value 的键值数据库，使用CRDT协议，实现最终一致性（已完成）

3. `doc`  一个专为配置文档、注册中心设计的文档数据库，使用CRDT协议，实现最终一致性（已有明确计划，未开发）

4. `sql`   一个基于sqlite  实现较强一致性关系型数据库，自建partition协议（探索中，未有明确计划）

5. `log`   基于CRDT协议协议实现的不可篡改日志组件，用于保险、智能汽车等需要保证一旦生成就不可逆的日志场景（探索中，未有明确计划）

6. `pubsub` 基于IPFS Pubsub实现 消息订阅、广播推送

## 内容列表

- [背景](#背景)
- [目标](#目标)
	- [使用场景]](#目录分层)	
- [架构](#架构)
	- [目录分层](#目录分层)
- [使用说明](#使用说明)
	- [安装](#安装)
	- [文档](#理解CDRT协议)
- [徽章](#徽章)
- [示例](#示例)
- [相关仓库](#相关仓库)
- [维护者](#维护者)
- [如何贡献](#如何贡献)
- [使用许可](#使用许可)

## 背景
 随着互联网的发展，中心化互联网逐渐往多中心化、分布式化演变，目前尚未有一种基础设施可以实现低延迟、去中心化的数据交换网络，ipfs的出现弥补了这一场景的空白,filecoin很好的解决了边缘文件存储问题，但是尚未有一种轻量级的数据库可以解决边缘数据存储，支撑dapp、区块链发展、及物联网终端网络不佳下的数据存储，这也是`P2PDB`数据库设计的初衷。
 
    
—— [跟ipfs的关系](https://www.ipfs.io/)    

> ipfs协议 用于构建分布式低延迟的消息传输网络，而P2PDB 项目是基于ipfs协议实现.。

—— [跟filecoin的区别](https://filecoin.io/)
> P2PDB类似filecoin实现文件交换网络一样，目的是为了实现全球去中心化的数据交换网络。不同的是， P2PDB只接受一段数据流的存储而不是文件，相对filecoin来说，P2PDB更轻量级，数据交换速度更快（数据体积更小），P2PDB可以理解为是一款边缘存储的轻量级关系型数据库，当然P2PDB也支持非关系性数据库中key=>value 键值对，以及类似mongdb的文档型数据存储格式。



## 目标
 这个数据库的目标是：

1. 一个**Dapp应用数据存储方案**
2. 一个**分布式数据库解决方案**
3. 一个**分布式缓存系统解决方案**
4. 一个**边缘数据存储解决方案**

 使用场景
* 1、文章阅读数、投票数、点赞数
* 2、文章评论
* 3、微服务的服务注册、发现
* 4、配置中心
* 5、分布式缓存
* 6、多人实时协作
* 7、更多.........

## 架构

#### 目录分层设计
```
interface 接口层
----api
--------count
--------kv
--------doc
--------sql
--------raft
-----http 对外暴露的http api 接口
-----rpc 对外暴露的rpc api接口
-----cli 命令行执行工具
domain 领域层， 核心逻辑
Infrastructure	基础设施层
----ipfs
--------ipfs-log
----Raft
----sqlite
----Util  公共工具，如日志
--------log
```


##安装

这个项目使用 [golang](hhttps://golang.org) 请确保你本地安装了它。


初始化项目
```sh
go mod tidy
```

编译kv数据库
```sh
go build ./interface/cli/kv/kv.go
```

使用
```sh
./kv
```
## 使用说明


## 文档
- [文档](https://github.com/Rock-liyi/p2pdb/tree/main/doc)

## 示例

```go
Commands:

> list               -> list items in the store
> get <key>          -> get value for a key
> put <key> <value>  -> store value on a key
> exit               -> quit
```



想了解我们建议的规范是如何被应用的，请参考 [example-readmes](example-readmes/)。



## 本数据库使用到的部分仓库

- [libp2p](https://github.com/libp2p/go-libp2p) 
- [ipfs](https://github.com/ipfs/go-ipfs)

## 维护者

[@Rock](https://github.com/Rock-liyi)

## 如何贡献

非常欢迎你的加入！[提一个 Issue](https://github.com/Rock-liyi/ptwopdb) 或者提交一个 Pull Request。


标准 Readme 遵循 [Contributor Covenant](http://contributor-covenant.org/version/1/3/0/) 行为规范。

### 贡献者

<!-- 感谢以下参与项目的人：
<a href="graphs/contributors"><img src="https://opencollective.com/standard-readme/contributors.svg?width=890&button=false" /></a> -->


## 使用许可

[Apache License, Version 2.0](LICENSE) © Rock Li












