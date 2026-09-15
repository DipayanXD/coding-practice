class Rectangle {
    private int length, width;

    Rectangle() {
        length = width = 1;
    }

    Rectangle(int side) {
        length = width = side;
    }

    Rectangle(int length, int width) {
        this.length = length;
        this.width = width;
    }

    int calculateArea() {
        return length * width;
    }

    public static void main(String[] args) {
        Rectangle r1 = new Rectangle();
        Rectangle r2 = new Rectangle(5);
        Rectangle r3 = new Rectangle(6, 4);

        System.out.println("Unit Square Area: " + r1.calculateArea());
        System.out.println("Square Area: " + r2.calculateArea());
        System.out.println("Rectangle Area: " + r3.calculateArea());
    }
}