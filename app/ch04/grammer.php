<?php // ! PHP 블록 시작
class Grammer { // ! 클래스 정의

    // ! property(속성)
    public $name = "GNUWIZ"; // # 문자열 GNUWIZ를 property $name에 할당

    // ! 메서드
    public function phpStudy($year) {
        echo "변수 name은 {$this->name} 입니다. <br/>";
        echo "변수 year은 {$year} 입니다. <br/>";
        echo $this->name . $year . "<br/>";
    }
}

// ! 변수
$year = 2022;
// ! 인스턴스
$grammer = new Grammer();
// ! 메서드 호출
$grammer->phpStudy($year);