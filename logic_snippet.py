# Logic Snippet
# A simple Python script for data processing demonstration.

class DataProcessor:
    def __init__(self, data):
        self.data = data

    def filter_even_numbers(self):
        return [x for x in self.data if x % 2 == 0]

    def get_summary(self):
        if not self.data:
            return "No data provided"
        return {
            "count": len(self.data),
            "sum": sum(self.data),
            "average": sum(self.data) / len(self.data)
        }

# Sample usage
if __name__ == "__main__":
    sample_data = [10, 21, 32, 43, 54, 65]
    processor = DataProcessor(sample_data)
    
    print(f"Original Data: {sample_data}")
    print(f"Even Numbers: {processor.filter_even_numbers()}")
    print(f"Data Summary: {processor.get_summary()}")
