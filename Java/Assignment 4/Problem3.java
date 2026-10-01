public class Problem3 {
    public static void main(String[] args) {
        if (args.length == 0) {
            System.out.println("No names provided to sort.");
        } else {
            for (int i = 0; i < args.length; i++) {
                int min = i;
                for (int j = i + 1; j < args.length; j++) {
                    if (args[min].compareTo(args[j]) > 0) {
                        min = j;
                    }
                }
                String temp = args[i];
                args[i] = args[min];
                args[min] = temp;

                System.out.println(args[i]);
            }
        }
    }
}
