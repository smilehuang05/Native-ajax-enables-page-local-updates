<?php
    $code = $_GET['code'];
    $books=array();
    $books['hlm']=array("bookname"=>"红楼梦","author"=>"曹雪芹","desc"=>"一个封建王朝的缩影");
    $books['sgyy']=array("bookname"=>"三国演义","author"=>"罗贯中","desc"=>"一个杀伐纷争的年代");
    $books['shz']=array("bookname"=>"水浒传","author"=>"施耐庵","desc"=>"108条好汉的故事");
    $books['xyj']=array("bookname"=>"西游记","author"=>"吴承恩","desc"=>"佛教与道教的斗争");
    //判断数组中有没有对应的键
    if(array_key_exists($code,$books) == 1){
        $book = $books[$code];//根据参数获取一本书的信息
        echo json_encode($book);
    }else{
        echo '{"flag":0}';
    }
?>