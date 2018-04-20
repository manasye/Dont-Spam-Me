import re

'''
MAIN FUNCTION
'''

def regular_expression(list, keywords):
    # Status that hold the string is spam or not
    list_of_status = []

    for string in list:
        continue
        # Will be implemented


def boyer_moore(list, keywords):
    # Status that hold the string is spam or not
    list_of_status = []

    for string in list:
        bm = search_occurence(string, keywords)
        if (bm != -1):
            list_of_status.append(True)
        else:
            list_of_status.append(False)


'''
HELPER FUNCTION
'''
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

if __name__ == '__main__':
    list_of_str = ["aaa", "bba", "aaabbb"]
    boyer_moore(list_of_str, "aaa")