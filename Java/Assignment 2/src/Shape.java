public class Shape {
    double area(double radius){
        return 3.14 * radius * radius;
    }

    double area(double base,double height){
        return 0.5 * base * height;
    }
    double area(int side){
        return (1.732 / 4) * side * side;
    }
    double area(double a, double b ,double c){
        double s = (a+b+c)/2;
        return Math.sqrt(s*(s-a)*(s-b)*(s-c));
    }
    public static void main(String[] args){
        Shape shape = new Shape();
        double circleArea = shape.area(5.0);
        double rightTriangleArea = shape.area(6,8);
        double equilateralArea = shape.area(5);
        double scaleneArea = shape.area(20,18,15);

        System.out.println("Circle Area: " + circleArea);
        System.out.println("Right Angled Triangle Area: " + rightTriangleArea);
        System.out.println("Equilateral Triangle Area: " + equilateralArea);
        System.out.printf("Scalene Triangle Area: %.2f%n " , scaleneArea);
    }

}
