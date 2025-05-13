# Use official PHP image
FROM php:8.2-cli

# Set working directory
WORKDIR /app

# Copy all project files
COPY . .

# Expose port for Render
EXPOSE 10000

# Start PHP server
CMD ["php", "-S", "0.0.0.0:10000"]
