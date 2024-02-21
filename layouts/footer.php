<hr>
<span id="busuanzi_container_site_pv"><small>您是第<span id="busuanzi_value_site_uv"></span>位访客！本页访问量<span id="busuanzi_value_page_pv"></span>次，本站访问量<span id="busuanzi_value_site_pv"></span>次。</small></span><br>
<span><small>友情链接：<br>
    ※&nbsp;博士导师：
    <a href="https://iopen.nwpu.edu.cn/">西北工业大学-光电与智能研究院(iOPEN)</a> | 
    <a href="https://iopen.nwpu.edu.cn/info/1015/1172.htm">李学龙教授</a> |
    <a href="https://iopen.nwpu.edu.cn/info/1251/2076.htm">孙哲副教授</a><br>
    ※&nbsp;本科导师：
    <a href="https://ai.dlmu.edu.cn/">大连海事大学-人工智能学院</a> |
    <a href="https://www.scholat.com/liuhongbo">刘洪波教授</a> |
    <a href="https://www.bzhang.work/">张博副教授</a>
</small></span>

<p>Coder.AN © 2023-2024, All Rights Reserved. Email: an.hongjun@foxmail.com</p>

<script>hljs.highlightAll();</script>
<script>
// 参考自http://www.javathinker.net/bbs_topic.do?postID=4182

$(function(){
    //给每一串代码元素增加复制代码节点
    var preList = [];
    $('pre').each(function(){
        preList.push($(this));
    })
    for (let pre of preList) {
        //给每个代码块增加上“复制代码”按钮
        let btn = $("<span class=\"btn-pre-copy\" onclick='preCopy(this)'>复制代码</span>");
        btn.prependTo(pre);
        console.log("haha")
    }
});

/**
    * 执行复制代码操作
    * @param obj
    */
function preCopy(obj) {
    //执行复制
    let btn = $(obj);
    let pre = btn.parent();
    //为了实现复制功能。新增一个临时的textarea节点。使用他来复制内容
    let temp = $("<textarea></textarea>");
    //避免复制内容时把按钮文字也复制进去。先临时置空
    btn.text("");
    temp.text(pre.text());
    temp.appendTo(pre);
    temp.select();
    document.execCommand("Copy");
    temp.remove();
    //修改按钮名
    btn.text("复制成功");
    //一定时间后吧按钮名改回来
    setTimeout(()=> {
        btn.text("复制代码");
    },1500);
}

</script>
