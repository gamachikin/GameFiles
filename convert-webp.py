from PIL import Image
import os

# Directory containing the .webp files
input_directory = "Icons"

# Output directory to save the converted .png files
output_directory = "Converted_Icons"

# Create the output directory if it doesn't exist
if not os.path.exists(output_directory):
    os.makedirs(output_directory)

# Get a list of all .webp files in the input directory
webp_files = [file for file in os.listdir(input_directory) if file.lower().endswith('.webp')]

# Convert each .webp file to .png and save it in the output directory
for webp_file in webp_files:
    webp_path = os.path.join(input_directory, webp_file)
    png_file = os.path.splitext(webp_file)[0] + ".png"
    png_path = os.path.join(output_directory, png_file)

    # Open the .webp file and save it as .png
    with Image.open(webp_path) as img:
        img.save(png_path, "PNG")

    print(f"Converted {webp_file} to {png_file}")

print("Conversion completed.")
