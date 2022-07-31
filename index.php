<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>主页 - My Pages</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/bootstrap/4.6.0/css/bootstrap.min.css" />
    <style>
        .page-oyp {
            display: none;
        }
    </style>
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.staticfile.org/blueimp-md5/2.19.0/js/md5.min.js"></script>
    <script src="https://cdn.staticfile.org/clipboard.js/2.0.10/clipboard.min.js"></script>
    <link rel="stylesheet" href="css/index.css?<?php echo time(); ?>">
    <script src="js/poncon.js?<?php echo time(); ?>"></script>
    <script src="js/index.js?<?php echo time(); ?>"></script>
</head>

<body class="fade user-select-none">
    <div class="container my-4 my-sm-5">
        <div class="head d-flex align-items-center mb-4">
            <img src="img/chevron-left-solid.svg" alt="返回上一页" draggable="false" class="btn-back-oyp cursor-pointer mr-3 mt-1" style="height: 30px; display: none;" onclick="history.back()">
            <h2 class="webTitle mb-0 mr-auto"></h2>
            <div class="float-right userCenter">
                <button class="btn btn-outline-danger" onclick="Poncon.showModal('userSetting')">个人中心</button>
            </div>
        </div>
        <div class="page-home page-oyp">
            <!-- 一堆按钮 -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="input-group searchBox">
                        <input type="text" class="border-dark form-control input-keyword bg-white" placeholder="请输入关键词" onclick="Poncon.showModal('searchCollect')" readonly="readonly">
                        <div class="input-group-append">
                            <button class="btn btn-dark" onclick="Poncon.showModal('searchCollect')">搜索</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-block btn-primary" onclick="Poncon.showModal('addCollect', 'add')">添加收藏</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-block btn-success" onclick="Poncon.showModal('tagList')">标签列表</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 收藏列表 -->
            <div class="row collectList">

            </div>
        </div>
        <div class="page-login page-oyp">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row h-100 align-items-center">
                                <!-- 登录组件 -->
                                <div class="col-lg-10 mx-auto sub-page-login page-oyp">
                                    <h2 class="text-center mb-4">用户登录</h2>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">账号</span>
                                        </div>
                                        <input type="text" class="form-control input-username" placeholder="请输入用户名 4-20位">
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">密码</span>
                                        </div>
                                        <input type="password" class="form-control input-password" placeholder="请输入密码 8-20位" autocomplete="new-password">
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <button class="btn btn-block btn-primary" onclick="Poncon.clickLogin()">登录</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn btn-block btn-outline-secondary" onclick="history.back();">返回</button>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="#/login/register">没有账号？点此注册</a>
                                    </div>
                                </div>
                                <!-- 注册组件 -->
                                <div class="col-lg-10 mx-auto sub-page-register page-oyp">
                                    <h2 class="text-center mb-4">注册账号</h2>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">账号</span>
                                        </div>
                                        <input type="text" class="form-control input-username" placeholder="请输入用户名 4-20位">
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">密码</span>
                                        </div>
                                        <input type="password" class="form-control input-password" placeholder="请输入密码 8-20位" autocomplete="new-password">
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">重复</span>
                                        </div>
                                        <input type="password" class="form-control input-password2" placeholder="请重复输入密码" autocomplete="new-password">
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <button class="btn btn-block btn-primary" onclick="Poncon.clickRegister()">注册</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn btn-block btn-outline-secondary" onclick="history.back();">返回</button>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="#/login">已有账号？点此登录</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-none d-md-block">
                            <img style="width: 100%;" src="img/insect-6626635_1920.jpg" draggable="false">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 模态框 - 搜索中心 -->
    <div class="modal modal-searchCollect " tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content position-relative">
                <div class="modal-header border-0">
                    <h5 class="modal-title">搜索列表</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-1 pb-0">
                    <div class="searchList" style="margin-top: 60px;">

                    </div>
                </div>
                <div class="position-absolute modal-body bg-white" style="width: 100%; margin-top: 50px;">
                    <div class="input-group">
                        <input type="text" class="form-control input-keyword" placeholder="百度一下 或者 #软件" onkeyup="Poncon.inputKeyup(event, 'clickSearch')">
                        <div class="input-group-append">
                            <button class="btn btn-dark" onclick="Poncon.clickSearch()">搜索</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 模态框 - 标签列表 -->
    <div class="modal modal-tagList" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content position-relative">
                <div class="modal-header border-0">
                    <h5 class="modal-title">标签列表</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-1 pb-0">
                    <div class="tagList text-center" style="margin-top: 60px;"></div>
                    <div class="collectList" style="display: none; margin-top: 60px;"></div>
                </div>
                <div class="position-absolute modal-body bg-white" style="width: 100%; margin-top: 50px;">
                    <div class="input-group">
                        <input type="text" class="form-control input-keyword" placeholder="查找标签" onkeyup="Poncon.indexTags()">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info allSelectTag" onclick="Poncon.allSelectTag()">全选</button>
                    <button class="btn btn-light allUnSelectTag" onclick="Poncon.allUnSelectTag()" style="display: none;">全不选</button>
                    <button class="btn btn-success submitSelect" disabled="disabled" onclick="Poncon.loadCollectListByTag(Poncon.data.tagListObjSelected, 0)">加载列表</button>
                    <button class="btn btn-secondary backToList" style="display: none;" onclick="Poncon.backToTagList()">返回标签列表</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 模态框 - 新增收藏 -->
    <div class="modal modal-addCollect" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title">添加收藏</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-1 pb-0">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend d-none d-sm-block">
                            <span class="input-group-text">网页URL</span>
                        </div>
                        <input type="text" class="form-control input-url" placeholder="请输入网页URL" onkeyup="Poncon.inputKeyup(event, 'getHostFromUrl')">
                        <div class="input-group-append">
                            <button class="btn btn-secondary getHost" onclick="Poncon.getHostFromUrl()" tabindex="-1">取HOST</button>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend d-none d-sm-block">
                            <span class="input-group-text">网页标题</span>
                        </div>
                        <input type="text" class="form-control input-title" placeholder="请输入网页标题" onkeyup="Poncon.inputKeyup(event, 'getWebTitle')">
                        <div class="input-group-append">
                            <button class="fenci btn btn-info" onclick="Poncon.fenci()">分词</button>
                            <button class="btn btn-secondary getWebTitle" onclick="Poncon.getWebTitle()" tabindex="-1">获取</button>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend d-none d-sm-block"><span class="input-group-text">备注</span>
                        </div><input type="text" class="form-control input-note" placeholder="请输入备注">
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-3 pr-md-0">
                            <div class="input-group">
                                <input type="text" class="form-control input-tagName" placeholder="标签名" onkeyup="Poncon.inputKeyup(event, 'addTag')">
                                <div class="input-group-append">
                                    <button class="btn btn-danger" onclick="Poncon.addTag()" tabindex="-1">加标签</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <button class="btn btn-primary btn-block addCollect" onclick="Poncon.addCollect()">添加收藏</button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <span>提示：点击标签可以移除</span>
                        <div class="float-right">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch_private">
                                <label class="custom-control-label" for="customSwitch_private">设置私密</label>
                            </div>
                        </div>
                    </div>
                    <div class="tagList">
                    </div>
                    <hr class="mt-0">
                    <div class="allTagList mb-2">
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- 模态框 - 个人中心 -->
    <div class="modal modal-userSetting" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title">个人中心</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-1">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">分享链接</span>
                        </div>
                        <input type="text" class="form-control input-shareUrl bg-white" id="input-shareUrl" readonly>
                        <div class="input-group-append">
                            <button class="btn btn-secondary copybtn" data-clipboard-target="#input-shareUrl">复制</button>
                        </div>
                    </div>
                    <div class="text-muted font-weight-bold mb-3">设置</div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">新窗口打开</span>
                        </div>
                        <div class="form-control">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch_newWindow" checked="checked">
                                <label class="custom-control-label" for="customSwitch_newWindow">开启</label>
                            </div>
                        </div>
                    </div>
                    <div class="btns">
                        <button class="btn btn-danger" onclick="Poncon.logout()">退出登录</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>