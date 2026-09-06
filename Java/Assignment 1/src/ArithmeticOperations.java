import java.util.Scanner;

class ArithmeticOperations {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        int choice;
        double a, b, result;

        System.out.println("----- MENU -----");
        System.out.println("1. Addition");
        System.out.println("2. Subtraction");
        System.out.println("3. Multiplication");
        System.out.println("4. Division");

        System.out.print("Enter your choice: ");
        choice = sc.nextInt();

        System.out.print("Enter first number: ");
        a = sc.nextDouble();

        System.out.print("Enter second number: ");
        b = sc.nextDouble();

        switch (choice) {
            case 1:
                result = a + b;
                System.out.println("Addition = " + result);
                break;

            case 2:
                result = a - b;
                System.out.println("Subtraction = " + result);
                break;

            case 3:
                result = a * b;
                System.out.println("Multiplication = " + result);
                break;

            case 4:
                if (b != 0) {
                    result = a / b;
                    System.out.println("Division = " + result);
                } else {
                    System.out.println("Division by zero is not possible.");
                }
                break;

            default:
                System.out.println("Invalid choice.");
        }
    }
}