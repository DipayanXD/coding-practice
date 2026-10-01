public class Problem1 {
    public static void main(String[] args){
        if(args.length != 3){
            System.out.println("ERROR: Enter 3 arguments");
        }
        int num1 = Integer.parseInt(args[0]);
        int num2 = Integer.parseInt(args[2]);
        String op = args[1];
        
        switch (op) {
            case "+":
                System.out.println("Result = " + (num1+num2));
                break;
            case "-":
                System.out.println("Result = " + (num1-num2));
                break;
            case "*":
                System.out.println("Result = " + (num1*num2));
                break;
            case "/":
                if(num2!=0){
                    System.out.println("Result = " + (num1/num2));
                    break;
                }
                System.out.println("Can't divided by zero.");
                break;
        
            default:
                System.out.println("Enter valid operator.");
                break;
        }
    }
}
