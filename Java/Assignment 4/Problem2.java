public class Problem2 {
    public static void main(String[] args){
        int even=0,odd=0;
        for (int i=0;i<args.length;i++){
            // System.out.println(Integer.parseInt(args[i])+args[i]);
            if(Integer.parseInt(args[i]) % 2 == 0)
                even++;
            else
                odd++;
        }
        System.out.println("Even Numbers: "+even);
        System.out.println("Odd Numbers: "+odd);
    }
}
