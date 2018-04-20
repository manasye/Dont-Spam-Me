def generate_last_occurence(string, size):
    # Set all number of chars to be -1
    last = [-1] * 128
 
    # Fill the actual value of last occurence
    for i in range(size):
        last[ord(string[i])] = i;
 
 	# Return last occurence list
    return last
 
def search_occurence(text, pattern):
	# Store the pattern and text length
    pat_length = len(pattern)
    txt_length = len(text)
 
    # Create the last character list
    last = generate_last_occurence(pattern, pat_length) 
 
    shifted = 0	
    while (shifted <= txt_length - pat_length):
    	# Last idx for backward iteration
        j = pat_length - 1
 
 		# Keep reducing j while text still matched pattern
        while (j >= 0 and pattern[j] == text[shifted + j]):
            j -= 1
 
        # Get the matching between pattern and text
        if j < 0:
            return shifted

        else:
            # Shift depend on it's availability in list
            shifted += max(1, j - last[ord(text[shifted + j])])

    # Return -1 when didn't find any match
    return -1
 
 
def main():
    txt = "HAHAHAUHUAHAHAAHA"
    pat = "HAHA"
    print(search_occurence(txt, pat))
 
if __name__ == '__main__':
    main()