import java.util.Scanner;
public class Example {
    public static void main(String[] args){
        Scanner s = new Scanner(System.in);
        System.out.print("Enter Temp is C: ");
        double c = s.nextDouble();
        double f = (c*9/5)+32;
        System.out.println("Temp is F: "+f);
        s.close();
    }
}
