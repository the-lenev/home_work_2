<?
class Children {
    public $name;
    public $age;
    public $sex;
    public $candy;

    function __construct($name = 'Name', $age = 5, $sex = 'М', $candy = '5'){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->candy = $candy;
    }

    function give($num){
        if ($this->candy - $num >= 0) {
            $this->candy -= $num;
            return 'У меня осталось '.$this->candy.' конфет.';
        } else {
            return 'У меня нет столько конфет.';
        }
    }
    function take($num){
        $this->candy += $num;
        return 'У меня стало '.$this->candy.' конфет.'  ;
    }
}
class Boy extends Children {
    function take_away($children){
        $this->candy += $children.candy;
        $children -> candy = 0;
        return $children -> cry();
    }
    function cry(){
        return 'Gyes dotn cry';
    }
}
class Girl extends Children {
    function __construct($name = 'Name', $age = 5, $sex = 'W', $candy = '5'){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->candy = $candy;
    }
    function cry(){
        return $this->name.' cryng';
    }
}
?>
