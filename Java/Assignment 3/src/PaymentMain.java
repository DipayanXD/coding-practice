class Payment {
    protected String transactionId;
    protected double amount;

    Payment(String transactionId, double amount) {
        this.transactionId = transactionId;
        this.amount = amount;
    }

    void processPayment() {
        System.out.println(
                "Transaction [" + transactionId +
                        "]: Processing generic payment of $" + amount
        );
    }
}

class CreditCardPayment extends Payment {
    private String cardNumber;

    CreditCardPayment(String transactionId, double amount,
                      String cardNumber) {
        super(transactionId, amount);
        this.cardNumber = cardNumber;
    }

    @Override
    void processPayment() {
        double fee = amount * 0.02;
        double finalAmount = amount + fee;

        System.out.println("Transaction ID: " + transactionId);
        System.out.println("Card Number: " + cardNumber);
        System.out.println("Base Amount: $" + amount);
        System.out.println("2% Surcharge: $" + fee);
        System.out.println("Final Charged Amount: $" + finalAmount);
    }
}

class UpiPayment extends Payment {
    private String upiId;

    UpiPayment(String transactionId, double amount,
               String upiId) {
        super(transactionId, amount);
        this.upiId = upiId;
    }

    @Override
    void processPayment() {
        System.out.println("Transaction ID: " + transactionId);
        System.out.println("UPI ID: " + upiId);
        System.out.println("Original Amount: $" + amount);
        System.out.println("No extra fee was applied.");
    }
}

public class PaymentMain {
    public static void main(String[] args) {

        Payment payment;

        payment = new CreditCardPayment(
                "TXN-101",
                1000.0,
                "4111-XXXX-XXXX-1234"
        );

        payment.processPayment();

        System.out.println();

        payment = new UpiPayment(
                "TXN-102",
                500.0,
                "user@oksbi"
        );

        payment.processPayment();
    }
}