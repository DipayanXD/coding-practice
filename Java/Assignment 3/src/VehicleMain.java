class Vehicle {
    private String vehicleId;
    protected String model;
    protected double baseDailyRate;

    Vehicle(String vehicleId, String model, double baseDailyRate) {
        this.vehicleId = vehicleId;
        this.model = model;
        this.baseDailyRate = baseDailyRate;
    }

    public void printVehicleId() {
        System.out.println("Vehicle ID: " + vehicleId);
    }
}

class Car extends Vehicle {
    int seatingCapacity;

    Car(String vehicleId, String model, double baseDailyRate,
        int seatingCapacity) {
        super(vehicleId, model, baseDailyRate);
        this.seatingCapacity = seatingCapacity;
    }

    public void displayCarDetails(int days) {
        double totalRent = (baseDailyRate * days)
                + (seatingCapacity * 50);

        printVehicleId();
        System.out.println("Model: " + model);
        System.out.println("Base Daily Rate: " + baseDailyRate);
        System.out.println("Seating Capacity: " + seatingCapacity);
        System.out.println("Total Rent: " + totalRent);
    }
}

class Bike extends Vehicle {
    boolean hasHelmet;

    Bike(String vehicleId, String model, double baseDailyRate,
         boolean hasHelmet) {
        super(vehicleId, model, baseDailyRate);
        this.hasHelmet = hasHelmet;
    }

    public void displayBikeDetails(int days) {
        double totalRent = (baseDailyRate * days)
                + (hasHelmet ? 100 : 0);

        printVehicleId();
        System.out.println("Model: " + model);
        System.out.println("Base Daily Rate: " + baseDailyRate);
        System.out.println("Helmet: " + hasHelmet);
        System.out.println("Total Rent: " + totalRent);
    }
}

public class VehicleMain {
    public static void main(String[] args) {

        Car car = new Car("CAR-901", "Sedan", 1200.0, 5);

        Bike bike = new Bike("BK-304", "Cruiser", 400.0, true);

        System.out.println("Car Details:");
        car.displayCarDetails(3);

        System.out.println("\nBike Details:");
        bike.displayBikeDetails(2);
    }
}