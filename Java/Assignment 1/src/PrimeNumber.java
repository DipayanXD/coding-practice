import java.util.Scanner;
public class PrimeNumber {
    public static void main(String[] args) {
        int num;
        boolean notprime = false;
        Scanner s = new Scanner(System.in);
        System.out.print("Enter a number: ");
        num = s.nextInt();
        if(num<=1){
            notprime=true;
        }else {
            for (int i = 2; i <= Math.sqrt(num); i++) {
                if (num % i == 0) {
                    notprime = true;
                    break;
                }
            }
        }
        if(notprime){
            System.out.println("Number is not prime");
        }else {
            System.out.println("Number is prime");
        }
        s.close();
    }
}
