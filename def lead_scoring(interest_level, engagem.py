def lead_scoring(interest_level, engagement_score):
    if interest_level == 'High':
        if engagement_score > 80:
            return 'Hot Lead'
        else:
            return 'Warm Lead'
    elif interest_level == 'Medium':
        return 'Warm Lead'
    else:
        return 'Cold Lead'

def send_follow_up_email(lead_status):
    for lead in lead_status:
        if lead['status'] == 'Hot Lead':
            send_email(lead['email'], 'Subject: Follow-up on Hot Lead', 'Dear Customer, ...')
        elif lead['status'] == 'Warm Lead':
            send_email(lead['email'], 'Subject: Follow-up on Warm Lead', 'Dear Customer, ...')
        else:
            send_email(lead['email'], 'Subject: We Value Your Interest', 'Dear Customer, ...')

def send_email(to, subject, body):
    pass

leads = [{'status': 'Hot Lead', 'email': 'hotlead@example.com'},
         {'status': 'Warm Lead', 'email': 'warmlead@example.com'},
         {'status': 'Cold Lead', 'email': 'coldlead@example.com'}]

send_follow_up_email(leads)
