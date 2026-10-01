public class Problem4 {
    public static void main(String[] args) {

        if (args.length != 2) {
            System.out.println("Error: Please provide exactly 2 arguments.");
            return;
        }

        int lower = Integer.parseInt(args[0]);
        int upper = Integer.parseInt(args[1]);

        // Swap if lower bound is not less than upper bound
        if (lower >= upper) {
            int temp = lower;
            lower = upper;
            upper = temp;
        }

        System.out.println("Prime numbers between " + lower + " and " + upper + ":");

        for (int num = lower; num <= upper; num++) {

            if (num < 2) {
                continue;
            }

            boolean prime = true;

            for (int i = 2; i <= num / 2; i++) {

                if (num % i == 0) {
                    prime = false;
                    break;
                }
            }

            if (prime) {
                System.out.print(num + " ");
            }
        }

        System.out.println();
    }
}