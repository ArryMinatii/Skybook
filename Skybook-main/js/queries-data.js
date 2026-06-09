const queries = [

{
    id:1,

    category:"Flight",

    icon:"✈",

    title:"Flights To New Delhi",

    description:
    "Display all flights heading toward New Delhi.",

    sql:
    "SELECT * FROM flight WHERE dest='New Delhi';",

    headers:[
        "Flight ID",
        "Source",
        "Destination",
        "Date"
    ],

    rows:[
        ["302","Chennai","New Delhi","2020-11-04"],
        ["307","Chennai","New Delhi","2020-12-01"],
        ["308","Chennai","New Delhi","2020-12-02"]
    ]
},

{
    id:2,

    category:"Flight",

    icon:"🛫",

    title:"Flights From Chennai To New Delhi",

    description:
    "Find all flights operating from Chennai to New Delhi.",

    sql:
    "SELECT * FROM flight WHERE src='Chennai' AND dest='New Delhi';",

    headers:[
        "Flight ID",
        "Date",
        "Time"
    ],

    rows:[
        ["302","2020-11-04","12:00"],
        ["307","2020-12-01","16:00"],
        ["308","2020-12-02","16:00"]
    ]
},

{
    id:3,

    category:"Booking",

    icon:"📘",

    title:"Flights Before 06/11/2020",

    description:
    "Find flight numbers for passenger before given date.",

    sql:
    "SELECT fid FROM booking WHERE pid='123';",

    headers:[
        "Flight ID"
    ],

    rows:[
        ["301"],
        ["302"]
    ]
},

{
    id:4,

    category:"Passenger",

    icon:"👤",

    title:"Passengers With Bookings",

    description:
    "Find passengers having at least one booking.",

    sql:
    "SELECT pname FROM passenger WHERE pid IN (SELECT pid FROM booking);",

    headers:[
        "Passenger Name"
    ],

    rows:[
        ["Aman Sharma"],
        ["Priya Verma"],
        ["Rohit Singh"],
        ["Sneha Jain"]
    ]
},

{
    id:5,

    category:"Passenger",

    icon:"🌍",

    title:"Passengers Without Bookings",

    description:
    "Find passengers without any bookings.",

    sql:
    "SELECT pname FROM passenger WHERE pid NOT IN (SELECT pid FROM booking);",

    headers:[
        "Passenger Name"
    ],

    rows:[
        ["No Records"]
    ]
},

{
    id:6,

    category:"Agency",

    icon:"🏢",

    title:"Agencies In Same City",

    description:
    "Find agencies located in same city as passenger.",

    sql:
    "SELECT aname FROM agency WHERE acity=(SELECT pcity FROM passenger WHERE pid='123');",

    headers:[
        "Agency Name"
    ],

    rows:[
        ["Jet"],
        ["Vistara"]
    ]
},

{
    id:7,

    category:"Flight",

    icon:"🛬",

    title:"Flights On Both Dates",

    description:
    "Find flights scheduled on both 01/12/2020 and 02/12/2020.",

    sql:
    "SELECT * FROM flight WHERE fdate IN ('2020-12-01','2020-12-02') AND time='16:00';",

    headers:[
        "Flight ID",
        "Date",
        "Time"
    ],

    rows:[
        ["303","2020-12-01","16:00"],
        ["304","2020-12-02","16:00"],
        ["307","2020-12-01","16:00"],
        ["308","2020-12-02","16:00"]
    ]
},


{
    id:8,

    category:"Flight",

    icon:"🛫",

    title:"Flights On Either Date",

    description:
    "Find flights scheduled on either 01/12/2020 or 02/12/2020 at 16:00.",

    sql:
    "SELECT * FROM flight WHERE fdate IN ('2020-12-01','2020-12-02') AND time='16:00';",

    headers:[
        "Flight ID",
        "Date",
        "Time",
        "Source",
        "Destination"
    ],

    rows:[
        ["303","2020-12-01","16:00","Mumbai","Delhi"],
        ["304","2020-12-02","16:00","Mumbai","Delhi"],
        ["307","2020-12-01","16:00","Chennai","New Delhi"],
        ["308","2020-12-02","16:00","Chennai","New Delhi"]
    ]
},

{
    id:9,

    category:"Agency",

    icon:"🏢",

    title:"Agencies Without Passenger 123",

    description:
    "Find agencies without bookings for passenger ID 123.",

    sql:
    "SELECT aname FROM agency WHERE aid NOT IN (SELECT aid FROM booking WHERE pid='123');",

    headers:[
        "Agency Name"
    ],

    rows:[
        ["Jet"],
        ["AirIndia"],
        ["Indigo"]
    ]
},

{
    id:10,

    category:"Passenger",

    icon:"👨",

    title:"Male Passengers With Jet Agency",

    description:
    "Find all male passengers associated with Jet agency.",

    sql:
    "SELECT * FROM passenger p, agency a, booking b WHERE p.pid=b.pid AND a.aid=b.aid AND pgender='Male' AND aname='Jet';",

    headers:[
        "Passenger Name",
        "Gender",
        "Agency"
    ],

    rows:[
        ["Arjun Saxena","Male","Jet"],
        ["Aman Sharma","Male","Jet"]
    ]
},


{
    id:11,

    category:"Passenger",

    icon:"📘",

    title:"Passengers With Multiple Flights",

    description:
    "Find passengers who booked more than one flight.",

    sql:
    "SELECT pid FROM booking GROUP BY pid HAVING COUNT(fid)>1;",

    headers:[
        "Passenger ID"
    ],

    rows:[
        ["110"]
    ]
},



{
    id:12,

    category:"Agency",

    icon:"🏆",

    title:"Agency With Maximum Bookings",

    description:
    "Find the agency handling maximum bookings.",

    sql:
    "SELECT aid FROM booking GROUP BY aid ORDER BY COUNT(*) DESC LIMIT 1;",

    headers:[
        "Agency ID"
    ],

    rows:[
        ["201"]
    ]
},

{
    id:13,

    category:"Passenger",

    icon:"🌍",

    title:"Passengers Using Different City Agencies",

    description:
    "Find passengers booking through agencies in different cities.",

    sql:
    "SELECT DISTINCT pname FROM passenger p, agency a, booking b WHERE p.pid=b.pid AND a.aid=b.aid AND p.pcity<>a.acity;",

    headers:[
        "Passenger Name"
    ],

    rows:[
        ["Aman Sharma"],
        ["Priya Verma"],
        ["Rohit Singh"]
    ]
},


{
    id:14,

    category:"Flight",

    icon:"🛬",

    title:"Flights With More Than 5 Passengers",

    description:
    "Find flights having more than 5 passengers booked.",

    sql:
    "SELECT fid FROM booking GROUP BY fid HAVING COUNT(pid)>5;",

    headers:[
        "Flight ID"
    ],

    rows:[
        ["No Records"]
    ]
},

{
    id:15,

    category:"Passenger",

    icon:"⏰",

    title:"Passenger With Earliest Flight",

    description:
    "Find passenger who booked earliest flight.",

    sql:
    "SELECT pname FROM passenger p, booking b, flight f WHERE p.pid=b.pid AND b.fid=f.fid ORDER BY f.time LIMIT 1;",

    headers:[
        "Passenger Name"
    ],

    rows:[
        ["Vikas Kumar"]
    ]
},

{
    id:16,

    category:"Passenger",

    icon:"🌎",

    title:"Passengers To Multiple Destinations",

    description:
    "Find passengers who traveled to more than one destination.",

    sql:
    "SELECT pid FROM booking b, flight f WHERE b.fid=f.fid GROUP BY pid HAVING COUNT(DISTINCT dest)>1;",

    headers:[
        "Passenger ID"
    ],

    rows:[
        ["110"]
    ]
},

{
    id:17,

    category:"Agency",

    icon:"🏢",

    title:"Agencies Without Bookings",

    description:
    "Find agencies that never handled any booking.",

    sql:
    "SELECT aname FROM agency WHERE aid NOT IN (SELECT aid FROM booking);",

    headers:[
        "Agency Name"
    ],

    rows:[
        ["No Records"]
    ]
},


{
    id:18,

    category:"Flight",

    icon:"🛫",

    title:"Flights Without Bookings",

    description:
    "Find flights that currently have no bookings.",

    sql:
    "SELECT fid FROM flight WHERE fid NOT IN (SELECT fid FROM booking);",

    headers:[
        "Flight ID"
    ],

    rows:[
        ["No Records"]
    ]
},


{
    id:19,

    category:"Passenger",

    icon:"📘",

    title:"Passengers Booking All Flights",

    description:
    "Find passengers who booked all available flights.",

    sql:
    "SELECT pid FROM booking GROUP BY pid HAVING COUNT(DISTINCT fid)=(SELECT COUNT(*) FROM flight);",

    headers:[
        "Passenger ID"
    ],

    rows:[
        ["No Records"]
    ]
},


{
    id:20,

    category:"Flight",

    icon:"📍",

    title:"Most Frequently Traveled Destination",

    description:
    "Find the destination with maximum bookings.",

    sql:
    "SELECT dest FROM flight f, booking b WHERE f.fid=b.fid GROUP BY dest ORDER BY COUNT(*) DESC LIMIT 1;",

    headers:[
        "Destination"
    ],

    rows:[
        ["New Delhi"]
    ]
},


{
    id:21,

    category:"Passenger",

    icon:"📅",

    title:"Passengers With Consecutive Flights",

    description:
    "Find passengers who booked flights on consecutive dates.",

    sql:
    "SELECT DISTINCT b1.pid FROM booking b1, booking b2 WHERE DATEDIFF(b2.fdate,b1.fdate)=1;",

    headers:[
        "Passenger ID"
    ],

    rows:[
        ["110"]
    ]
},

{
    id:22,

    category:"Booking",

    icon:"🧮",

    title:"Passenger Count By Source City",

    description:
    "Find total passengers traveling from each source city.",

    sql:
    "SELECT src, COUNT(pid) FROM booking b, flight f WHERE b.fid=f.fid GROUP BY src;",

    headers:[
        "Source City",
        "Passenger Count"
    ],

    rows:[
        ["Bhopal","4"],
        ["Chennai","4"],
        ["Delhi","2"],
        ["Mumbai","2"],
        ["Indore","1"]
    ]
},

{
    id:23,

    category:"Agency",

    icon:"👥",

    title:"Agencies Booking Male And Female",

    description:
    "Find agencies booking tickets for both male and female passengers.",

    sql:
    "SELECT DISTINCT aname FROM agency a, booking b, passenger p WHERE a.aid=b.aid AND b.pid=p.pid GROUP BY aname HAVING COUNT(DISTINCT pgender)=2;",

    headers:[
        "Agency Name"
    ],

    rows:[
        ["Jet"]
    ]
},


{
    id:24,

    category:"Flight",

    icon:"🏆",

    title:"Flight With Highest Bookings",

    description:
    "Find the flight having maximum number of bookings.",

    sql:
    "SELECT fid FROM booking GROUP BY fid ORDER BY COUNT(*) DESC LIMIT 1;",

    headers:[
        "Flight ID"
    ],

    rows:[
        ["303"]
    ]
},

{
    id:25,

    category:"Passenger",

    icon:"👤",

    title:"Passengers Using One Agency Only",

    description:
    "Find passengers who booked flights through only one agency.",

    sql:
    "SELECT pid FROM booking GROUP BY pid HAVING COUNT(DISTINCT aid)=1;",

    headers:[
        "Passenger ID"
    ],

    rows:[
        ["101"],
        ["102"],
        ["103"],
        ["104"],
        ["105"],
        ["106"],
        ["107"],
        ["108"],
        ["109"]
    ]
},


{
    id:26,

    category:"Agency",

    icon:"📈",

    title:"Agencies Above Average Bookings",

    description:
    "Find agencies having bookings greater than average.",

    sql:
    "SELECT aid FROM booking GROUP BY aid HAVING COUNT(*) > (SELECT AVG(total) FROM (SELECT COUNT(*) AS total FROM booking GROUP BY aid) temp);",

    headers:[
        "Agency ID"
    ],

    rows:[
        ["201"]
    ]
},

{
    id:27,

    category:"Passenger",

    icon:"🚫",

    title:"Passengers Never Traveling To New Delhi",

    description:
    "Find passengers who never traveled to New Delhi.",

    sql:
    "SELECT pname FROM passenger WHERE pid NOT IN (SELECT pid FROM booking b, flight f WHERE b.fid=f.fid AND dest='New Delhi');",

    headers:[
        "Passenger Name"
    ],

    rows:[
        ["Sneha Jain"],
        ["Vikas Kumar"],
        ["Raj Malhotra"]
    ]
},

{
    id:28,

    category:"Booking",

    icon:"📅",

    title:"Bookings On Each Date",

    description:
    "Find total bookings made on each booking date.",

    sql:
    "SELECT fdate, COUNT(*) FROM booking GROUP BY fdate;",

    headers:[
        "Booking Date",
        "Total Bookings"
    ],

    rows:[
        ["2020-11-03","1"],
        ["2020-11-04","1"],
        ["2020-11-05","1"],
        ["2020-11-06","1"],
        ["2020-11-07","1"],
        ["2020-11-08","1"],
        ["2020-12-01","4"],
        ["2020-12-02","3"]
    ]
},

{
    id:29,

    category:"Passenger",

    icon:"🅰",

    title:"Passengers Starting With A",

    description:
    "Find passengers whose names start with letter A.",

    sql:
    "SELECT pname FROM passenger WHERE pname LIKE 'A%';",

    headers:[
        "Passenger Name"
    ],

    rows:[
        ["Aman Sharma"],
        ["Akash Patel"],
        ["Anjali Mehta"],
        ["Arjun Saxena"]
    ]
},



{
    id:30,

    category:"Flight",

    icon:"🌐",

    title:"Flights With Different Cities",

    description:
    "Find flights where source and destination are different cities.",

    sql:
    "SELECT * FROM flight WHERE src<>dest;",

    headers:[
        "Flight ID",
        "Source",
        "Destination"
    ],

    rows:[
        ["301","Bhopal","Chennai"],
        ["302","Chennai","New Delhi"],
        ["303","Mumbai","Delhi"],
        ["304","Mumbai","Delhi"],
        ["305","Delhi","Chennai"],
        ["306","Bhopal","Mumbai"],
        ["307","Chennai","New Delhi"],
        ["308","Chennai","New Delhi"],
        ["309","Indore","Delhi"],
        ["310","Delhi","Bhopal"]
    ]
}


];