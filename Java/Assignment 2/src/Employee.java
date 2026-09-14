import java.util.Scanner;

class Employee {
    int employeeId;
    String employeeName;
    double basicPay, hra, da, allowance;

    Employee(double basicPay) {
        this.basicPay = basicPay;
    }

    void calculateSalary() {
        if (basicPay <= 10000) {
            hra = basicPay * 0.10;
            da = basicPay * 0.05;
            allowance = 4000;
        } else if (basicPay <= 40000) {
            hra = basicPay * 0.20;
            da = basicPay * 0.10;
            allowance = 8000;
        } else {
            hra = basicPay * 0.25;
            da = basicPay * 0.15;
            allowance = 15000;
        }
    }

    void displayEmpDetails() {
        System.out.println("Basic Pay: " + basicPay);
        System.out.println("HRA: " + hra);
        System.out.println("DA: " + da);
        System.out.println("Allowance: " + allowance);
        System.out.println("Salary: " + (basicPay + hra + da + allowance));
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter Basic Pay: ");
        Employee e = new Employee(sc.nextDouble());
        e.calculateSalary();
        e.displayEmpDetails();
    }
}