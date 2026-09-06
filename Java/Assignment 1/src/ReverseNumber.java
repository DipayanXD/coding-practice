import java.util.Scanner;

class ReverseNumber {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        int num, original, reverse = 0, remainder;

        System.out.print("Enter a number: ");
        num = sc.nextInt();

        original = num;

        while (num != 0) {
            remainder = num % 10;
            reverse = reverse * 10 + remainder;
            num = num / 10;
        }

        System.out.println("Reversed number = " + reverse);

        if (original == reverse) {
            System.out.println("The number is Palindrome.");
        } else {
            System.out.println("The number is not Palindrome.");
        }
    }
}