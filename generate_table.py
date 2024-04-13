import mysql.connector


db = mysql.connector.connect(
    host = 'localhost',
    user = 'admin',
    password = '1234',
    database = 'pokemon'
)

cursor = db.cursor()

cursor.execute('select * from card')

result = cursor.fetchall()

final_result = '''
    <table class="table">
'''
for i in result:
    final_result += f'''
        <tr>
            <td>{i[0]}</td>
            <td>{i[1]}</td>
            <td>{i[2]}</td>
            <td>{i[3]}</td>
            <td>{i[4]}</td>
            <td>{i[5]}</td>
            <td>{i[6]}</td>
            <td>{i[7]}</td>
            <td>{i[8]}</td>
        </tr>
    '''

final_result += '</table>'

print(final_result)