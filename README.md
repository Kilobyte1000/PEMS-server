# PEMS-server
The sample server part for the election system.
This is a quick POC in php for how the behaviour should work. This was run in WAMP stack for testing
The final server would've been written in kotlin and embedded in the admin app in the end.

This is what it currently does:
1. Authenticates a person using the provided ID. The other fields are used to prove one's identity
2. Checks if the user has already voted
3. Counts the casted vote and sets the user to have voted

Sample Video


https://github.com/Kilobyte1000/PEMS-server/assets/59469337/0f785d93-f185-4a7d-aff5-003ff7026b1b

