<?php
/**
 * User: 张宇<${userEmail}>
 * Date: 2019/6/27
 * Time: 16:10
 */

//算法
//1. 提猴子算法
//n 猴子数 m 隔m个提出猴子
function king($n , $m){
	$monkey = range(1 , $n); //0到n的数组
	$i = 0; //开始给猴子计数
	while(count($monkey) > 1){
		$i++;
		$head = array_shift($monkey); //从头一个一个踢出去 $head 是踢出去的那个
		if($i % $m != 0){
			array_push($monkey , $head); //如果不是m的倍数，则猴子
		}
	}
	return $monkey[0];
}

//2.使对象可以像数组一样foreach循环
//Iterator 迭代器 需要实现5个方法
class Test implements Iterator{
	//要循环的对象
	private $test = ["id" => 1 , "name" => "PHP"];
	public function rewind() {
		// TODO: Implement rewind() method.
		//将索引指到首元素
	}

	public function current() {
		// TODO: Implement current() method.
		//当前元素
	}
	public function next() {
		// TODO: Implement next() method.
		//下一个元素
	}
	public function key() {
		// TODO: Implement key() method.
		//当前元素的键值
	}
	public function valid() {
		// TODO: Implement valid() method.
		//是否还有下一个元素
	}
}


/**
 * Class TestHandle
 *
 * @date   ${DATE} ${TIME}
 * @author 张宇<${userEmail}>
 * 1，现在有一个字符串，你要对这个字符串进行 n 次操作，每次操作给出两个数字：(p, l) 表示当前字符串中从下标为 p 的字符开始的长度为 l 的一个子串。你要将这个子串*左右翻转后插在这个子串原来位置的正后方，求最后得到的字符串是什么。字符串的下标是从 0 开始的，你可以从样例中得到更多信息。
 *每组测试用例仅包含一组数据，每组数据第一行为原字符串，长度不超过 10 ，仅包含大小写字符与数字。接下来会有一个数字 n 表示有 n 个操作，再接下来有 n *行，每行两个整数，表示每次操作的(p , l)。保证输入的操作一定合法，最后得到的字符串长度不超过 1000。
 */
class TestHandle{
	private $str ;

	public function __construct($str) {
		$this->str = $str;
	}

	/**
	 *
	 * @author 张宇<${userEmail}>
	 *  n 为执行的操作[p,l] => p是字符串下标，l是截取的长度
	 * @param $n
	 */
	public function run($n){
		foreach($n as $value){
			$this->execute($value[0] , $value[1]);
		}
		return $this->str;
	}

	public function execute($p , $length){
		$len = strlen($this->str); //原字符串长度
		//这里判断一下截断的字符串和原字符串的长度问题
		if(($length-$p) > $len){
			exit(1);
		}
		$tmp_str = substr($this->str , $p , $length); //截取字符串
		$s1 = substr($this->str , 0 , $p + $length);  //从头到截取末尾
		$s2 = substr($this->str , $p + $length);  //剩下的那部分字符串

		$dest_str = strrev($tmp_str);

		$this->str = $s1 . $dest_str .$s2;    // 最后的字符串
	}
}


var_dump((new TestHandle("dddddd"))->run([[0,1],[1,3]]));

/**
 2,你作为一名出道的歌手终于要出自己的第一份专辑了，你计划收录 n 首歌而且每首歌的长度都是 s 秒，每首歌必须完整地收录于一张 CD 当中。每张 CD 的容量长度都是 L 秒，而且你至少得保证同一张 CD 内相邻两首歌中间至少要隔 1 秒。为了辟邪，你决定任意一张 CD 内的歌数不能被 13 这个数字整除，那么请问你出这张专辑至少需要多少张 CD ？
每组测试用例仅包含一组数据，每组数据第一行为三个正整数 n, s, L。 保证 n ≤ 100 , s ≤ L ≤ 10000
 */

class TestHandle1{
	private $song_num; //歌曲数量
	private $song_size; //歌曲大小
	private $cd_size; //CD大小
	public function __construct($n , $s , $c) {
		$this->song_num = $n;
		$this->song_size = $s;
		$this->cd_size = $c;
	}


	private function single_cd(){
		//假设一张CD 可以放n个歌曲song_size , 还有中间的间隔1s
		$n = floor($this->cd_size / ($this->song_size + 1));
		//然后对剩余的空间做判断
		$gap = $this->cd_size - $n * ($this->song_size + 1);
		if($gap == $this->song_size){ //剩余空间是否刚好放一首歌曲
				$n += 1;
		}

		if($n % 13 == 0){
			$n -= 1;
		}

		return $n;
	}
}