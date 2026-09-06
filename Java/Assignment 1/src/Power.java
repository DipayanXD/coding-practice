import java.util.Scanner;
public class Power {
    public static void main(String[] args) {
        int x, y, result = 1;
        Scanner s = new Scanner(System.in);
        System.out.print("Enter the number: ");
        x = s.nextInt();
        System.out.print("Enter the power: ");
        y = s.nextInt();

        for (int i = 1; i <= y; i++) {
            result *= x;
        }

        System.out.println(x + "^" + y + " = " + result);
    }
}
