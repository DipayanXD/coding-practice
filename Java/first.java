import java.util.Random;
public class first {
    public static void main(String[] args){
        System.out.println("Hello World");
        int x = 147;
        double pi = 3.14;
        char sym = '$';
        String name = "Dipayan";
        System.out.println("Hello "+name+". Here is your bill: "+sym+x+pi );

        int a = 123;
        int b = 321;
        int temp;

        System.out.println("a="+a);
        System.out.println("b="+b);
        temp = a;
        a = b;
        b = temp;
        System.out.println("a="+a);
        System.out.println("b="+b);

        Random r = new Random();
        int num = r.nextInt(6)+1;
        System.out.println(num);
    }
    
}