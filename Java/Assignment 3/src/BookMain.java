class Book {
    String title;
    double price;

    Book(String title, double price) {
        this.title = title;
        this.price = price;
    }

    Book(Book other) {
        this.title = other.title;
        this.price = other.price;
    }

    void displayDetails() {
        System.out.println("Title: " + title);
        System.out.println("Price: " + price);
    }
}

public class BookMain {
    public static void main(String[] args) {
        Book book1 = new Book("Java Programming", 450.0);
        Book book2 = new Book(book1);

        System.out.println("Book 1:");
        book1.displayDetails();

        System.out.println("\nBook 2:");
        book2.displayDetails();

        book2.price = 500.0;

        System.out.println("\nAfter changing Book 2:");

        System.out.println("Book 1:");
        book1.displayDetails();

        System.out.println("Book 2:");
        book2.displayDetails();
    }
}