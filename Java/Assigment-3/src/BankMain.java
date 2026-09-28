class BankAccount {
    String accountHolderName;
    double balance;

    static double totalBankBalance = 0;

    BankAccount(String accountHolderName, double initialDeposit) {
        this.accountHolderName = accountHolderName;
        this.balance = initialDeposit;
        totalBankBalance += initialDeposit;
    }

    void deposit(double amount) {
        balance += amount;
        totalBankBalance += amount;
    }

    static void displayBankTotal() {
        System.out.println("Total Bank Balance: $" + totalBankBalance);
    }

    void displayAccountInfo() {
        System.out.println("Account Holder: " + accountHolderName);
        System.out.println("Balance: $" + balance);
    }
}

public class BankMain {
    public static void main(String[] args) {
        BankAccount.displayBankTotal();

        BankAccount alice = new BankAccount("Alice", 1000);
        BankAccount bob = new BankAccount("Bob", 500);

        BankAccount.displayBankTotal();

        alice.deposit(250);

        alice.displayAccountInfo();
        bob.displayAccountInfo();

        BankAccount.displayBankTotal();
    }
}