import java.util.Scanner;

public class Shape {

    double area(double radius) {
        return 3.14 * radius * radius;
    }

    double area(double base, double height) {
        return 0.5 * base * height;
    }

    double area(int side) {
        return (1.732 / 4) * side * side;
    }

    double area(double a, double b, double c) {
        double s = (a + b + c) / 2;
        return Math.sqrt(s * (s - a) * (s - b) * (s - c));
    }

    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);
        Shape shape = new Shape();

        System.out.println("1. Circle");
        System.out.println("2. Right Angled Triangle");
        System.out.println("3. Equilateral Triangle");
        System.out.println("4. Scalene Triangle");

        System.out.print("Enter your choice: ");
        int choice = sc.nextInt();

        switch (choice) {

            case 1:
                System.out.print("Enter radius: ");
                double radius = sc.nextDouble();
                System.out.println("Circle Area: " + shape.area(radius));
                break;

            case 2:
                System.out.print("Enter base: ");
                double base = sc.nextDouble();
                System.out.print("Enter height: ");
                double height = sc.nextDouble();
                System.out.println("Right Angled Triangle Area: "
                        + shape.area(base, height));
                break;

            case 3:
                System.out.print("Enter side: ");
                int side = sc.nextInt();
                System.out.println("Equilateral Triangle Area: "
                        + shape.area(side));
                break;

            case 4:
                System.out.print("Enter side a: ");
                double a = sc.nextDouble();
                System.out.print("Enter side b: ");
                double b = sc.nextDouble();
                System.out.print("Enter side c: ");
                double c = sc.nextDouble();
                System.out.println("Scalene Triangle Area: "
                        + shape.area(a, b, c));
                break;

            default:
                System.out.println("Invalid choice.");
        }

        sc.close();
    }
}