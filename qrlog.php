000000000000INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('10.1','Bank Deposit80063', 'credit','10.1','417','EUR' )/n/r---------------------UPDATE wpav_aistore_wallet_balance
    SET balance = '10.1',transaction_id=30  WHERE user_id = '417' and currency='EUR'/n/r---------------------INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('10','Payment debit for the transaction against the Escrow id80063', 'debit','0.1','417','EUR' )/n/r---------------------UPDATE wpav_aistore_wallet_balance
    SET balance = '0.1',transaction_id=31  WHERE user_id = '417' and currency='EUR'/n/r---------------------INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.1','Payment fee debit for the transaction against the Escrow id80063', 'debit','0','417','EUR' )/n/r---------------------UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=32  WHERE user_id = '417' and currency='EUR'/n/r---------------------INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('10','Payment deposit for the transaction against the Escrow id80063', 'credit','-411.38','23','EUR' )/n/r---------------------UPDATE wpav_aistore_wallet_balance
    SET balance = '-411.38',transaction_id=33  WHERE user_id = '23' and currency='EUR'/n/r---------------------INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.1','Payment deposit fee for the transaction against the Escrow id80063', 'credit','-411.28','23','EUR' )/n/r---------------------UPDATE wpav_aistore_wallet_balance
    SET balance = '-411.28',transaction_id=34  WHERE user_id = '23' and currency='EUR'/n/r---------------------/n/r---------------------/n/r---------------------INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('10.1','Bank Deposit80063', 'credit','10.1','417','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '10.1',transaction_id=35  WHERE user_id = '417' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('10','Payment debit for the transaction against the Escrow id80063', 'debit','0.1','417','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0.1',transaction_id=36  WHERE user_id = '417' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.1','Payment fee debit for the transaction against the Escrow id80063', 'debit','0','417','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=37  WHERE user_id = '417' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('10','Payment deposit for the transaction against the Escrow id80063', 'credit','-401.28','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '-401.28',transaction_id=38  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.1','Payment deposit fee for the transaction against the Escrow id80063', 'credit','-401.18','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '-401.18',transaction_id=39  WHERE user_id = '23' and currency='EUR'














INSERT INTO wpav_aistore_wallet_balance  (transaction_id  ,    user_id   ,balance , currency  ) VALUES ('0','23', '0','GBP' )




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0','Bank Deposit80062', 'credit','0','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=40  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0','Payment debit for the transaction against the Escrow id80062', 'debit','0','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=41  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0','Payment fee debit for the transaction against the Escrow id80062', 'debit','0','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=42  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0','Payment deposit for the transaction against the Escrow id80062', 'credit','0','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=43  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0','Payment deposit fee for the transaction against the Escrow id80062', 'credit','0','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=44  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('346.43','Bank Deposit80061', 'credit','1032.43','418','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '1032.43',transaction_id=45  WHERE user_id = '418' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('343','Payment debit for the transaction against the Escrow id80061', 'debit','689.43','418','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '689.43',transaction_id=46  WHERE user_id = '418' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('3.43','Payment fee debit for the transaction against the Escrow id80061', 'debit','686','418','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '686',transaction_id=47  WHERE user_id = '418' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('343','Payment deposit for the transaction against the Escrow id80061', 'credit','-58.18','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '-58.18',transaction_id=48  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('3.43','Payment deposit fee for the transaction against the Escrow id80061', 'credit','-54.75','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '-54.75',transaction_id=49  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0','Bank Deposit80062', 'credit','0','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=50  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0','Payment debit for the transaction against the Escrow id 80062', 'debit','0','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=51  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0','Payment fee debit for the transaction against the Escrow id 80062', 'debit','0','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=52  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0','Payment deposit for the transaction against the Escrow id 80062', 'credit','0','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=53  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0','Payment deposit fee for the transaction against the Escrow id 80062', 'credit','0','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=54  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('10.1','Bank Deposit80063', 'credit','10.1','417','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '10.1',transaction_id=55  WHERE user_id = '417' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('10','Payment debit for the transaction against the Escrow id 80063', 'debit','0.1','417','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0.1',transaction_id=56  WHERE user_id = '417' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.1','Payment fee debit for the transaction against the Escrow id 80063', 'debit','0','417','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=57  WHERE user_id = '417' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('10','Payment deposit for the transaction against the Escrow id 80063', 'credit','-44.75','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '-44.75',transaction_id=58  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.1','Payment deposit fee for the transaction against the Escrow id 80063', 'credit','-44.65','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '-44.65',transaction_id=59  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('346.43','Bank Deposit80061', 'credit','1032.43','418','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '1032.43',transaction_id=60  WHERE user_id = '418' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('343','Payment debit for the transaction against the Escrow id 80061', 'debit','689.43','418','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '689.43',transaction_id=61  WHERE user_id = '418' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('3.43','Payment fee debit for the transaction against the Escrow id 80061', 'debit','686','418','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '686',transaction_id=62  WHERE user_id = '418' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('343','Payment deposit for the transaction against the Escrow id 80061', 'credit','298.35','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '298.35',transaction_id=63  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('3.43','Payment deposit fee for the transaction against the Escrow id 80061', 'credit','301.78','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '301.78',transaction_id=64  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('33.33','Bank Deposit80060', 'credit','33.33','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '33.33',transaction_id=65  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('33','Payment debit for the transaction against the Escrow id 80060', 'debit','0.33','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0.33',transaction_id=66  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.33','Payment fee debit for the transaction against the Escrow id 80060', 'debit','0','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=67  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('33','Payment deposit for the transaction against the Escrow id 80060', 'credit','334.78','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '334.78',transaction_id=68  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.33','Payment deposit fee for the transaction against the Escrow id 80060', 'credit','335.11','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '335.11',transaction_id=69  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_balance  (transaction_id  ,    user_id   ,balance , currency  ) VALUES ('0','', '0','' )




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0','Bank Deposit80063', 'credit','0','','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=70  WHERE user_id = '0' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment debit for the transaction against the Escrow id 80063', 'debit','0','','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=71  WHERE user_id = '0' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment fee debit for the transaction against the Escrow id 80063', 'debit','0','','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=72  WHERE user_id = '0' and currency=''




INSERT INTO wpav_aistore_wallet_balance  (transaction_id  ,    user_id   ,balance , currency  ) VALUES ('0','23', '0','' )




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment deposit for the transaction against the Escrow id 80063', 'credit','0','23','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=73  WHERE user_id = '23' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment deposit fee for the transaction against the Escrow id 80063', 'credit','0','23','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=74  WHERE user_id = '23' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0','Bank Deposit80062', 'credit','0','','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=75  WHERE user_id = '0' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment debit for the transaction against the Escrow id 80062', 'debit','0','','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=76  WHERE user_id = '0' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment fee debit for the transaction against the Escrow id 80062', 'debit','0','','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=77  WHERE user_id = '0' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment deposit for the transaction against the Escrow id 80062', 'credit','0','23','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=78  WHERE user_id = '23' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment deposit fee for the transaction against the Escrow id 80062', 'credit','0','23','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=79  WHERE user_id = '23' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0','Bank Deposit80061', 'credit','0','','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=80  WHERE user_id = '0' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment debit for the transaction against the Escrow id 80061', 'debit','0','','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=81  WHERE user_id = '0' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment fee debit for the transaction against the Escrow id 80061', 'debit','0','','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=82  WHERE user_id = '0' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment deposit for the transaction against the Escrow id 80061', 'credit','0','23','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=83  WHERE user_id = '23' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment deposit fee for the transaction against the Escrow id 80061', 'credit','0','23','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=84  WHERE user_id = '23' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0','Bank Deposit80060', 'credit','0','','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=85  WHERE user_id = '0' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment debit for the transaction against the Escrow id 80060', 'debit','0','','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=86  WHERE user_id = '0' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment fee debit for the transaction against the Escrow id 80060', 'debit','0','','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=87  WHERE user_id = '0' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment deposit for the transaction against the Escrow id 80060', 'credit','0','23','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=88  WHERE user_id = '23' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('','Payment deposit fee for the transaction against the Escrow id 80060', 'credit','0','23','' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=89  WHERE user_id = '23' and currency=''




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('43.43','Bank Deposit80059', 'credit','43.43','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '43.43',transaction_id=90  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('43','Payment debit for the transaction against the Escrow id 80059', 'debit','0.43','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0.43',transaction_id=91  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.43','Payment fee debit for the transaction against the Escrow id 80059', 'debit','0','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=92  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('43','Payment deposit for the transaction against the Escrow id 80059', 'credit','378.11','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '378.11',transaction_id=93  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.43','Payment deposit fee for the transaction against the Escrow id 80059', 'credit','378.54','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '378.54',transaction_id=94  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('66.66','Bank Deposit80058', 'credit','66.66','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '66.66',transaction_id=95  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('66','Payment debit for the transaction against the Escrow id 80058', 'debit','0.66','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0.66',transaction_id=96  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.66','Payment fee debit for the transaction against the Escrow id 80058', 'debit','0','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=97  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('66','Payment deposit for the transaction against the Escrow id 80058', 'credit','66','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '66',transaction_id=98  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.66','Payment deposit fee for the transaction against the Escrow id 80058', 'credit','66.66','23','GBP' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '66.66',transaction_id=99  WHERE user_id = '23' and currency='GBP'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23.23','Bank Deposit80057', 'credit','23.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '23.23',transaction_id=100  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23','Payment debit for the transaction against the Escrow id 80057', 'debit','0.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0.23',transaction_id=101  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.23','Payment fee debit for the transaction against the Escrow id 80057', 'debit','0','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=102  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23','Payment deposit for the transaction against the Escrow id 80057', 'credit','401.54','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '401.54',transaction_id=103  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.23','Payment deposit fee for the transaction against the Escrow id 80057', 'credit','401.77','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '401.77',transaction_id=104  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_balance  (transaction_id  ,    user_id   ,balance , currency  ) VALUES ('0','23', '0','USD' )




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('99.99','Bank Deposit80056', 'credit','99.99','23','USD' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '99.99',transaction_id=105  WHERE user_id = '23' and currency='USD'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('99','Payment debit for the transaction against the Escrow id 80056', 'debit','0.98999999999999','23','USD' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0.98999999999999',transaction_id=106  WHERE user_id = '23' and currency='USD'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.99','Payment fee debit for the transaction against the Escrow id 80056', 'debit','0','23','USD' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=107  WHERE user_id = '23' and currency='USD'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('99','Payment deposit for the transaction against the Escrow id 80056', 'credit','99','23','USD' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '99',transaction_id=108  WHERE user_id = '23' and currency='USD'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.99','Payment deposit fee for the transaction against the Escrow id 80056', 'credit','99.99','23','USD' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '99.99',transaction_id=109  WHERE user_id = '23' and currency='USD'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('2346.23','Bank Deposit80055', 'credit','2346.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '2346.23',transaction_id=110  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('2323','Payment debit for the transaction against the Escrow id 80055', 'debit','23.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '23.23',transaction_id=111  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23.23','Payment fee debit for the transaction against the Escrow id 80055', 'debit','0','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=112  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('2323','Payment deposit for the transaction against the Escrow id 80055', 'credit','2724.77','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '2724.77',transaction_id=113  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23.23','Payment deposit fee for the transaction against the Escrow id 80055', 'credit','2748','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '2748',transaction_id=114  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_balance  (transaction_id  ,    user_id   ,balance , currency  ) VALUES ('0','1', '0','Other' )




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23.23','Bank Deposit80054', 'credit','23.23','1','Other' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '23.23',transaction_id=115  WHERE user_id = '1' and currency='Other'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23','Payment debit for the transaction against the Escrow id 80054', 'debit','0.23','1','Other' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0.23',transaction_id=116  WHERE user_id = '1' and currency='Other'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.23','Payment fee debit for the transaction against the Escrow id 80054', 'debit','0','1','Other' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=117  WHERE user_id = '1' and currency='Other'




INSERT INTO wpav_aistore_wallet_balance  (transaction_id  ,    user_id   ,balance , currency  ) VALUES ('0','23', '0','Other' )




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23','Payment deposit for the transaction against the Escrow id 80054', 'credit','23','23','Other' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '23',transaction_id=118  WHERE user_id = '23' and currency='Other'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.23','Payment deposit fee for the transaction against the Escrow id 80054', 'credit','23.23','23','Other' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '23.23',transaction_id=119  WHERE user_id = '23' and currency='Other'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23.23','Bank Deposit80053', 'credit','23.23','1','Other' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '23.23',transaction_id=120  WHERE user_id = '1' and currency='Other'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23','Payment debit for the transaction against the Escrow id 80053', 'debit','0.23','1','Other' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0.23',transaction_id=121  WHERE user_id = '1' and currency='Other'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.23','Payment fee debit for the transaction against the Escrow id 80053', 'debit','0','1','Other' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=122  WHERE user_id = '1' and currency='Other'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23','Payment deposit for the transaction against the Escrow id 80053', 'credit','46.23','23','Other' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '46.23',transaction_id=123  WHERE user_id = '23' and currency='Other'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.23','Payment deposit fee for the transaction against the Escrow id 80053', 'credit','46.46','23','Other' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '46.46',transaction_id=124  WHERE user_id = '23' and currency='Other'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('2346.23','Bank Deposit80052', 'credit','2346.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '2346.23',transaction_id=125  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('2323','Payment debit for the transaction against the Escrow id 80052', 'debit','23.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '23.23',transaction_id=126  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23.23','Payment fee debit for the transaction against the Escrow id 80052', 'debit','0','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=127  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('2323','Payment deposit for the transaction against the Escrow id 80052', 'credit','5071','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '5071',transaction_id=128  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23.23','Payment deposit fee for the transaction against the Escrow id 80052', 'credit','5094.23','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '5094.23',transaction_id=129  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('234.32','Bank Deposit80051', 'credit','234.32','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '234.32',transaction_id=130  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('232','Payment debit for the transaction against the Escrow id 80051', 'debit','2.32','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '2.32',transaction_id=131  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('2.32','Payment fee debit for the transaction against the Escrow id 80051', 'debit','0','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=132  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('232','Payment deposit for the transaction against the Escrow id 80051', 'credit','5326.23','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '5326.23',transaction_id=133  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('2.32','Payment deposit fee for the transaction against the Escrow id 80051', 'credit','5328.55','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '5328.55',transaction_id=134  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23.23','Bank Deposit80050', 'credit','23.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '23.23',transaction_id=135  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23','Payment debit for the transaction against the Escrow id 80050', 'debit','0.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0.23',transaction_id=136  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.23','Payment fee debit for the transaction against the Escrow id 80050', 'debit','0','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=137  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23','Payment deposit for the transaction against the Escrow id 80050', 'credit','5351.55','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '5351.55',transaction_id=138  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.23','Payment deposit fee for the transaction against the Escrow id 80050', 'credit','5351.78','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '5351.78',transaction_id=139  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23.23','Bank Deposit80049', 'credit','23.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '23.23',transaction_id=140  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23','Payment debit for the transaction against the Escrow id 80049', 'debit','0.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0.23',transaction_id=141  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.23','Payment fee debit for the transaction against the Escrow id 80049', 'debit','0','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=142  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23','Payment deposit for the transaction against the Escrow id 80049', 'credit','5374.78','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '5374.78',transaction_id=143  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.23','Payment deposit fee for the transaction against the Escrow id 80049', 'credit','5375.01','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '5375.01',transaction_id=144  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('439.35','Bank Deposit80048', 'credit','439.35','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '439.35',transaction_id=145  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('435','Payment debit for the transaction against the Escrow id 80048', 'debit','4.35','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '4.35',transaction_id=146  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('4.35','Payment fee debit for the transaction against the Escrow id 80048', 'debit','0','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=147  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('435','Payment deposit for the transaction against the Escrow id 80048', 'credit','5810.01','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '5810.01',transaction_id=148  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('4.35','Payment deposit fee for the transaction against the Escrow id 80048', 'credit','5814.36','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '5814.36',transaction_id=149  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('326.23','Bank Deposit80047', 'credit','326.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '326.23',transaction_id=150  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('323','Payment debit for the transaction against the Escrow id 80047', 'debit','3.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '3.23',transaction_id=151  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('3.23','Payment fee debit for the transaction against the Escrow id 80047', 'debit','0','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=152  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('323','Payment deposit for the transaction against the Escrow id 80047', 'credit','6137.36','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '6137.36',transaction_id=153  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('3.23','Payment deposit fee for the transaction against the Escrow id 80047', 'credit','6140.59','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '6140.59',transaction_id=154  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('2346.23','Bank Deposit80046', 'credit','2346.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '2346.23',transaction_id=155  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('2323','Payment debit for the transaction against the Escrow id 80046', 'debit','23.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '23.23',transaction_id=156  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23.23','Payment fee debit for the transaction against the Escrow id 80046', 'debit','0','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=157  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('2323','Payment deposit for the transaction against the Escrow id 80046', 'credit','8463.59','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '8463.59',transaction_id=158  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23.23','Payment deposit fee for the transaction against the Escrow id 80046', 'credit','8486.82','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '8486.82',transaction_id=159  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23.23','Bank Deposit80045', 'credit','23.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '23.23',transaction_id=160  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23','Payment debit for the transaction against the Escrow id 80045', 'debit','0.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0.23',transaction_id=161  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.23','Payment fee debit for the transaction against the Escrow id 80045', 'debit','0','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=162  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23','Payment deposit for the transaction against the Escrow id 80045', 'credit','8509.82','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '8509.82',transaction_id=163  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.23','Payment deposit fee for the transaction against the Escrow id 80045', 'credit','8510.05','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '8510.05',transaction_id=164  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23.23','Bank Deposit80044', 'credit','23.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '23.23',transaction_id=165  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23','Payment debit for the transaction against the Escrow id 80044', 'debit','0.23','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0.23',transaction_id=166  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.23','Payment fee debit for the transaction against the Escrow id 80044', 'debit','0','1','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '0',transaction_id=167  WHERE user_id = '1' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('23','Payment deposit for the transaction against the Escrow id 80044', 'credit','8533.05','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '8533.05',transaction_id=168  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('0.23','Payment deposit fee for the transaction against the Escrow id 80044', 'credit','8533.28','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '8533.28',transaction_id=169  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('10','Payment transaction for the release escrow with escrow id80063', 'debit','8523.28','23','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '8523.28',transaction_id=170  WHERE user_id = '23' and currency='EUR'




INSERT INTO wpav_aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES ('10','Payment transaction for the release escrow with escrow id80063', 'credit','10','417','EUR' )




UPDATE wpav_aistore_wallet_balance
    SET balance = '10',transaction_id=171  WHERE user_id = '417' and currency='EUR'




