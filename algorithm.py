import re

'''
MAIN FUNCTION
'''
def kmp(list,keywords):
    # Status that hold the string is spam or not
    list_of_status = []

    for string in list:
        # Append the result based on spam or not
        if (search_kmp(string.lower(), keywords.lower())):
            list_of_status.append(True)
        else:
            list_of_status.append(False)

    print("List of status using KMP: ")
    print(list_of_status)


def regular_expression(list, keywords):
    # Status that hold the string is spam or not
    list_of_status = []

    regex = re.compile(keywords.lower())
    for string in list:
        # Append the result based on spam or not
        if (regex.search(string.lower())):
            list_of_status.append(True)
        else:
            list_of_status.append(False)

    print("List of status using Regular Expression: ")
    print(list_of_status)

def boyer_moore(list, keywords):
    # Status that hold the string is spam or not
    list_of_status = []

    for string in list:
        # Set string and keywords to lower case
        bm = search_occurence(string.lower(), keywords.lower())

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

def search_kmp(text, word):
    idx_table = []
    idx_table.append(0)
    j = 0
    cont = False;
    
    for i in range(1, len(word) - 1):
        if (word[i] == word[j]):
            j += 1
            cont = True
        else:
            cont = False
        if (not(cont)):
            j = 0
        idx_table.append(j)

    idx = 0
    found = False
    j = 0

    while (idx < len(text) and not found):
            if (text[idx] == word[j]):
                j += 1
                if (j == len(word)):
                    found = True
            else:
                if (j > 0):
                    j = idx_table[j-1]
                    idx -= 1
            idx += 1
        
    return found;

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
    regular_expression(list_of_str, "aaa")
    kmp(list_of_str, "aaa")