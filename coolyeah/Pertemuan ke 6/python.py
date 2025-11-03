monitor ResourceManager {
    private boolean resourceAvailable = true;
    condition queue;
    
    procedure acquire() {
        while (!resourceAvailable) {
            wait(queue);
        }
        resourceAvailable = false;
    }
    
    procedure release() {
        resourceAvailable = true;
        signal(queue);
    }
}