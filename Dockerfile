FROM php:8.2-cli

# Set the working directory to the project root
WORKDIR /app

# Copy the project files into the container
COPY . /app

# Define the default command to run when the container starts
CMD ["php"]