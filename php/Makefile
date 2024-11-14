golden-master.txt: 
	php GameRunnerTest.php > golden-master.txt

.PHONY: test
test:
	bash -c "diff golden-master.txt <(php GameRunnerTest.php)"

