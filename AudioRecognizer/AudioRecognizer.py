import speech_recognition as sr
r = sr.Recognizer()
with sr.Microphone() as source:
	print ("speak... ")
	audio = r.listen(source)
try:
	text = r.recignize_google(audio)
	print("you said : {}",format(text))
except:
	print("could not recognize your voice")