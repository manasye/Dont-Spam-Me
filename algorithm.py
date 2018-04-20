import re

'''
MAIN FUNCTION
'''

def regular_expression(list, keywords):
    # Status that hold the string is spam or not
    list_of_status = []

    # Set list and keywords to lower case
    for string in list:
        string.lower()
    keywords.lower()

    regex = re.compile(keywords)
    for string in list:
        matched = regex.findall(string)
        # Append the result based on spam or not
        if (regex.search(string)):
            list_of_status.append(True)
        else:
            list_of_status.append(False)

    print("List of status using Regular Expression: ")
    print(list_of_status)

def boyer_moore(list, keywords):
    # Status that hold the string is spam or not
    list_of_status = []

    # Set list and keywords to lower case
    for string in list:
        string.lower()
    keywords.lower()

    for string in list:
        bm = search_occurence(string, keywords)
        # Append the result based on spam or not
        if (bm != -1):
            list_of_status.append(True)
        else:
            list_of_status.append(False)

    print("List of status using Boyer Moore Algorithm: ")
    print(list_of_status)

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
    list_of_str = ["Aaac", "bba", "Aaabcbb"]
    boyer_moore(list_of_str, "aaa")
    regular_expression(list_of_str, "aaac")