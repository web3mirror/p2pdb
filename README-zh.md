
功能：去中心化、分布式、点对点数据库、PtwopDB使用IPFS为其数据存储和IPFS Pubsub自动与对等方同步数据库。PtwopDB期望打造一个去中心化的分布式数据库，使 PtwopDB 成为去中心化应用程序 (dApps)、区块链应用程序和离线优先 Web 应用程序的绝佳选择.

安全性：PtwopDB存储的数据都是通过公钥加密，只有掌握私钥的客户端才可以解密查看真实数据


PtwopDB：

count 一个分布式计数器，用于验证项目可行性，使用CRDT协议，实现最终一致性（开发中）

cache   一个key=>value 的键值数据库，使用CRDT协议，实现最终一致性（已有明确计划，未开发）

doc  一个专为配置文档、注册中心设计的文档数据库，使用CRDT协议，实现最终一致性（已有明确计划，未开发）

sql   一个基于sqlite  实现较强一致性关系型数据库，自建partition协议（探索中，未有明确计划）

raft   基于raft  协议跟IPFS协议结合的强一致性数据库（探索中，未有明确计划）


分层架构设计
interface
count
cache
doc
sql
raft
domain 领域层， 核心逻辑
Infrastructure	基础设施层
ipfs
ipfs-log
Raft
sqlite
Util  公共工具，如日志
log
Http 
对外暴露的http api 接口
Rpc
对外暴露的rpc api接口
Cli
命令行执行工具