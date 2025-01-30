golden-master.txt: 
	php GameRunnerTest.php > golden-master.txt
	php GameRunnerTest.php 42 >> golden-master.txt

.PHONY: test
test:
	bash -c "diff golden-master.txt <(php GameRunnerTest.php; php GameRunnerTest.php 42)"

