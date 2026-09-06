import java.util.Scanner;
public class Fibonacci {
    public static void main(String[] args) {
        int range;
        int num1=0;
        int num2=1;
        Scanner s = new Scanner(System.in);
        System.out.println("Enter no of terms: ");
        range = s.nextInt();
        for (int i=0;i<range;i++){
            int temp =num1+num2;
            System.out.print(num1+", ");
            num1=num2;
            num2=temp;

        }
        s.close();
    }
}
