class Invoice {
    String itemId, itemName;
    int quantity;
    double price, discount, gst;

    Invoice(String itemId, String itemName, int quantity,
            double price, double discount, double gst) {
        this.itemId = itemId;
        this.itemName = itemName;
        this.quantity = quantity;
        this.price = price;
        this.discount = discount;
        this.gst = gst;
    }

    double calculateInvoice() {
        double amount = quantity * price;
        amount -= amount * discount / 100;
        return amount + amount * gst / 100;
    }

    void displayInvoice() {
        System.out.printf("%-12s %-18s %-10s %-10s %-12s %-8s%n", itemId, itemName, quantity,price, discount + "%", gst + "%");
    }

    public static void main(String[] args) {
        System.out.printf("%-12s %-18s %-10s %-10s %-12s %-8s%n","Item ID", "Item Name", "Quantity", "Price","Discount", "GST");

        Invoice i1 = new Invoice("EL147", "Electric Cable", 5, 100, 20, 10);
        Invoice i2 = new Invoice("VEG239", "Cauliflower", 3, 50, 15, 9);
        Invoice i3 = new Invoice("NOVEG220", "Chicken Legs", 10, 200, 25, 8);

        i1.displayInvoice();
        i2.displayInvoice();
        i3.displayInvoice();
    }
}