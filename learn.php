<?php

class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getData() {
        return "Name: {$this->name}, Base Salary: {$this->salary}";
    }
}

class Manager extends Employee {
    public $bonus;

    public function __construct($name, $salary, $bonus) {
        // استدعاء دالة البناء من الكلاس الأب
        parent::__construct($name, $salary);
        $this->bonus = $bonus;
    }

    public function getTotalSalary() {
        // حساب إجمالي الراتب بالوصول لخصائص الأب
        return $this->salary + $this->bonus;
    }
}

// إنشاء الكائن
$manager = new Manager("Ahmed", 1000, 200);

// طباعة التفاصيل وإجمالي الراتب
echo $manager->getData() . "\n";
echo "Total Salary: " . $manager->getTotalSalary();

?>