class Employee {
    final int empId;
    static final String COMPANY_NAME = "TechCorp";
    String name;

    Employee(int empId, String name) {
        this.empId = empId;
        this.name = name;
    }

    final void printBadge() {
        System.out.println("Company: " + COMPANY_NAME);
        System.out.println("Employee ID: " + empId);
        System.out.println("Name: " + name);
    }
}

class Manager extends Employee {
    String department;

    Manager(int empId, String name, String department) {
        super(empId, name);
        this.department = department;
    }

    // Cannot override printBadge() because it is final.
}

public class EmployeeMain {
    public static void main(String[] args) {
        Employee emp1 = new Employee(101, "Sarah");

        emp1.printBadge();

        // emp1.empId = 102;
        // ERROR: cannot assign a value to final variable empId
    }
}