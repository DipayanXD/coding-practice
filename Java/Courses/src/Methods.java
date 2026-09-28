class Claculator{
    public int add(int n1,int n2){
        return (n1+n2);
    }
    public int add(int n1,int n2,int n3){
        return n1 + n2 + n3;
    }
    public int sub(int n1,int n2){
        return (n1-n2);
    }
    public int mul(int n1,int n2){
        return  (n1*n2);
    }
    public double div(double n1,double n2){
        return (n1/n2);
    }
}
public class Methods {
    public static void main(String[] args) {
        Claculator cal = new Claculator();
        double result = cal.add(45,5,7);
        System.out.println(result);
    }
}
