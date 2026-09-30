class Order {
    private final String orderId;
    private final String customerName;
    private final double totalAmount;
    private final double discountPercent;

    Order() {
        this("0000", "Guest");
        System.out.println("No-argument constructor");
    }

    Order(String orderId, String customerName) {
        this(orderId, customerName, 0.0);
        System.out.println("Two-argument constructor");
    }

    Order(String orderId, String customerName, double totalAmount) {
        this(orderId, customerName, totalAmount, 0.0);
        System.out.println("Three-argument constructor");
    }

    Order(String orderId, String customerName, double totalAmount,
          double discountPercent) {
        this.orderId = orderId;
        this.customerName = customerName;
        this.totalAmount = totalAmount;
        this.discountPercent = discountPercent;

        System.out.println("Four-argument constructor");
    }

    void displayDetails() {
        System.out.println("Order ID: " + orderId);
        System.out.println("Customer: " + customerName);
        System.out.println("Total Amount: " + totalAmount);
        System.out.println("Discount: " + discountPercent + "%");
        System.out.println();
    }
}

public class OrderDemo {
    public static void main(String[] args) {

        System.out.println("Order 1:");
        Order order1 = new Order();
        order1.displayDetails();

        System.out.println("Order 2:");
        Order order2 = new Order("ORD101", "Oggy");
        order2.displayDetails();

        System.out.println("Order 3:");
        Order order3 = new Order("ORD102", "Jack", 1500.0);
        order3.displayDetails();

        System.out.println("Order 4:");
        Order order4 = new Order("ORD103", "Bob", 2000.0, 10.0);
        order4.displayDetails();
    }
}