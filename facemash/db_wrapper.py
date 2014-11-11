from pymongo import MongoClient


def db_init(server='localhost', db_name='sample'):
    client = MongoClient(server, 27017)
    db = client[db_name]
    return db