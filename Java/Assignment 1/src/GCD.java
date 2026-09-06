import java.util.Scanner;
public class GCD {
    public static void main(String[] args) {
        int x;
        int y;
        int GCD = 0;
        Scanner s = new Scanner(System.in);
        System.out.print("Enter a 1st number: ");
        x = s.nextInt();
        System.out.print("Enter a 2nd number: ");
        y = s.nextInt();
        for (int i=1;i<x;i++){
            if(x%i == 0 && y%i == 0){
                GCD = i;
            }
        }
        System.out.println("The GCD of "+x+" & "+y+" = "+GCD);
        s.close();
    }
}
